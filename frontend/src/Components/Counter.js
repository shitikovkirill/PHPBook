import React from 'react';
import {
  useParams
} from "react-router-dom";

import { useQuery, useMutation } from '@apollo/react-hooks';
import { gql } from 'apollo-boost';



const VISITED = gql`
  mutation Visited($isFirst: Boolean!) {
    visited(isFirst: $isFirst) {
      ok
    }
  }
`;

function checkVisit(id){
  const is_visit = localStorage.getItem(`page_${id}_is_visited`);
  localStorage.setItem(`opened_${id}_is_visited`, true);
  return Boolean(is_visit)
}

export default function PageContainer() {
  let { pageId } = useParams();
  const [start, { result }] = useMutation(VISITED);

  return null;
}
