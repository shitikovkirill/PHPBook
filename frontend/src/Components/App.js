import React from 'react';
import ApolloClient from 'apollo-boost';
import { ApolloProvider } from '@apollo/react-hooks';
import PageList from './PageList';
import {
  BrowserRouter as Router,
  Switch,
  Route,
} from "react-router-dom";
import PageContainer from './PageContainer';
import Counter from './Counter';

const client = new ApolloClient({});

function App() {
  return (
    <ApolloProvider client={client}>
      <Router>
        <Counter />
        <Switch>
          <Route path="/page/:pageId">
            <PageContainer />
          </Route>
          <Route path="/">
            <PageList/>
          </Route>
        </Switch>
      </Router>
    </ApolloProvider>
  );
}

export default App;
