import React from "react";
import './Header.scss';
import Container from "../Container/Container";
import Logo from "../Logo/Logo";

const Header = () => {
    return (
        <header className="header">
            <Container>
                <Logo/>
            </Container>
        </header>
    );
};

export default Header;
