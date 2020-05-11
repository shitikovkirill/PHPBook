import React from 'react';
import logo from '../logo.svg';
import './PageList.css';
import {
  Link
} from "react-router-dom";
import { useQuery } from '@apollo/react-hooks';
import { gql } from 'apollo-boost';

const PAGES = gql`
  query Pages {
    pages{
      id
      title
    }
  }
`;

export default function PageList() {
  const { loading, error, data } = useQuery(PAGES);
  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error :(</p>;

  const { pages } = data;
  return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo"/>
          <ul>
            {pages.map((item) => <li key={item.id}>
              <Link to={`/page/${item.id}`}>
                {item.title}
              </Link>
            </li>)}
          </ul>
        </header>
      </div>
  );
}
