import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import Demo from './components/Demo';

const root = document.getElementById('react-chart');
if (root) {
  ReactDOM.createRoot(root).render(<Demo />);
}
