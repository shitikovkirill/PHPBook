import React from 'react';
import { useMutation } from '@apollo/react-hooks';
import { gql } from 'apollo-boost';
import { useLocation } from "react-router-dom";


const VISITED = gql`
  mutation Visited($isVisited: Boolean!, $url: String!) {
    visited(isVisited: $isVisited, url: $url) {
      ok
      views
      visitors
    }
  }
`;

function checkVisit(id) {
  const key = `is_visited_${id}`;
  const is_visit = localStorage.getItem(key);
  localStorage.setItem(key, true);
  return Boolean(is_visit)
}

export default function Counter() {
  let location = useLocation();
  const [start, { data, loading, error}] = useMutation(VISITED);
  React.useEffect(() => {
    const url = location.pathname;
    const isVisited = checkVisit(location.pathname);
    start({ variables: { isVisited, url } });
  }, [location]);
  if (!data || loading) return <p>Loading...</p>;
  if (error) return <p>Error :(</p>;
  console.log(data);
  console.log(loading);
  if (data){
    console.log(data);
    return <div>
      Views: {data.visited.views}
      <br/>
      Visitors: {data.visited.visitors}
    </div>;
  }
}
