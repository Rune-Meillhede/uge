<nav>
    <div class="headtext">
        <a href="./index.php">
            <h1>Vejle Fritidsaktiviteter</h1>
        </a>
    </div>

    <div class="logo">
        <img src="./img/logo_large.png" alt="Vejle kommun logo">
    </div>

    <div class="search">
       

        <!-- Search -->
        <input type="text" id="searchInput" placeholder="Søg efter aktiviteter...">
    </div>
</nav>



<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

/* NAVBAR */
nav {
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas: 
        "headtext logo search";
    align-items: center;
    background: whitesmoke;
}

/* HEADTEXT */
.headtext {
    grid-area: headtext;
    height: 100px;

    display: flex;
    justify-content: center;
    align-items: center;
}

.headtext a {
    text-decoration: none;
}

.headtext h1 {
    font-size: 2.5rem;
    color: black;
    font-family: "Lobster Two", sans-serif;
}

/* LOGO */
.logo {
    grid-area: logo;

    height: 100px;

    display: flex;
    justify-content: center;
    align-items: center;

    border-bottom: red solid 2px;
    border-radius: 0 0 0 15px;
}

.logo img {
    max-height: 90px;
}

/* SEARCH */
.search {
    grid-area: search;

    height: 100px;

    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;

    border-bottom: red solid 2px;
}

.dark-mode-btn {
    height: 40px;
    width: 40px;

    border: none;
    border-radius: 50%;

    cursor: pointer;
    font-size: 18px;
}

.search input {
    width: 80%;
    max-width: 350px;

    height: 40px;

    border-radius: 20px;
    border: none;

    padding: 0 20px;

    font-size: 1rem;

    transition: 0.2s;
}

.search input:hover {
    transform: scale(1.02);
}

.search input:focus {
    outline: none;
    box-shadow: 0 0 8px rgba(255,0,0,0.3);
}

/* AKTIVITETER */
.activities {
    width: 90%;
    margin: 40px auto;

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.activity-card {
    padding: 30px;
    background: whitesmoke;
    border-radius: 15px;
    text-align: center;
    font-size: 1.2rem;
    transition: 0.2s;
}

.activity-card:hover {
    transform: translateY(-5px);
}

/* MOBILE */
@media (max-width: 768px) {

    nav {
        grid-template-columns: 1fr;
        grid-template-areas:
            "headtext"
            "search";
    }

    .logo {
        display: none;
    }

    .headtext {
        height: auto;
        padding: 15px;
    }

    .headtext h1 {
        font-size: 1.7rem;
        text-align: center;
    }

    .search {
        width: 100%;
        padding: 15px;
        border: none;
    }

    .search input {
        width: 100%;
    }
}

</style>