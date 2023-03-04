import React from "react";
import './Logo.scss';

const Logo = () => {
    return (
        <a href="/" className="logo">
            <img src="/img/header/logo.png" alt="StudyTime - Расписание студента" className="logo__img"/>
            <p className="logo__title"> StudyTime </p>
        </a>
    );
}

export default Logo;
