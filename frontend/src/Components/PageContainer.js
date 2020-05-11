import React from 'react';
import {
  useParams
} from "react-router-dom";

import { useQuery } from '@apollo/react-hooks';
import { gql } from 'apollo-boost';
import Page from './Page';

const PAGE = gql`
  query Page($pageId: Int!) {
    page (id: $pageId){
      id
      title
      description
    }
  }
`;

export default function PageContainer() {
  let { pageId } = useParams();
  const { loading, error, data } = useQuery(
    PAGE,
    {variables: { pageId }
    });
  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error :(</p>;
  const { page } = data;
  return (
      <Page page={page} />
  );
}
