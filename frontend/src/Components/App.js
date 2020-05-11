import React from 'react';
import ApolloClient from 'apollo-boost';
import { ApolloProvider } from '@apollo/react-hooks';
import PageList from './PageList';
import {
  BrowserRouter as Router,
  Switch,
  Route,
} from "react-router-dom";
import Page from './Page';

const client = new ApolloClient({});

function App() {
  return (
    <ApolloProvider client={client}>
      <Router>
        <Switch>
          <Route path="/page/:pageId">
            <Page />
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
