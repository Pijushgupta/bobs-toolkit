import React from "react";
import  ReactDOM  from "react-dom/client";
import App from './components/app'

const htmlRoot  = document.querySelector('#toolkit-root');
const domRoot = ReactDOM.createRoot(htmlRoot);
domRoot.render(
    <React.StrictMode>
		<App />
	</React.StrictMode>
)


