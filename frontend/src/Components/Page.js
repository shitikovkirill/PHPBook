import React from 'react';

export default function PageContainer({page}) {
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
