import React from 'react';
import {
  useParams
} from "react-router-dom";

import { useQuery } from '@apollo/react-hooks';
import { gql } from 'apollo-boost';

const PAGE = gql`
  query Page($pageId: Int!) {
    page (id: $pageId){
      id
      title
      description
    }
  }
`;

export default function Page() {
  let { pageId } = useParams();
  const { loading, error, data } = useQuery(
    PAGE,
    {variables: { pageId }
    });
  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error :(</p>;

  const { page } = data;
  return (
      <div className="App">
        <header className="App-header">
          <ul>
            <li>{page.title}</li>
            <li>{page.description}</li>
          </ul>
        </header>
      </div>
  );
}
