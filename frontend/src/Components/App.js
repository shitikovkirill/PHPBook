import React from 'react';
import ApolloClient from 'apollo-boost';
import { ApolloProvider } from '@apollo/react-hooks';
import PageList from './PageList';

const client = new ApolloClient({});

function App() {
  return (
    <ApolloProvider client={client}>
      <PageList/>
    </ApolloProvider>
  );
}

export default App;
