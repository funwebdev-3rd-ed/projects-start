import React from 'react';
import HeaderBar from './HeaderBar.js';
import HeaderMenu from './HeaderMenu.js';

const HeaderApp = function (props) {
    return (
        <header className="header">
          <HeaderBar />
          <HeaderMenu />
        </header>
        );
}

export default HeaderApp;
