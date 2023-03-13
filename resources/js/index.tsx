// Import core dependencies
import './bootstrap';
import React from "react";
import ReactDom from 'react-dom/client';

// Import pages
import { Home } from "@pages";

const rootElement = document.getElementById('app');
ReactDom.createRoot(rootElement!).render(<Home />);
