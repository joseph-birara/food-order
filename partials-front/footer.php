<head>

    <style>
    :root {
        --green: #27ae60;
        --black: #192a56;
        --light-color: #666;
        --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
        --yellow: #ffe70f;
    }

    .footer {
        text-align: center
    }

    .footer .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
        gap: 1.5rem;
    }

    .footer .box-container .box h3 {
        padding: .5rem 0;
        font-size: 1.8rem;
        color: var(--black);
    }

    .footer .box-container .box a {
        display: block;
        padding: .5rem 0;
        font-size: 1.2rem;
        color: var(--light-color);
    }

    .footer .box-container .box a:hover {
        color: var(--green);
        text-decoration: underline;
    }

    .footer .credit {
        text-align: center;
        border-top: .1rem solid rgba(0, 0, 0, .1);
        font-size: 1rem;
        color: var(--black);
        padding: .5rem;
        padding-top: 1.5rem;
        margin-top: 1.5rem;
    }

    .footer .credit span {
        color: var(--green);
    }
    </style>
</head>

<body>
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">Bole</a>
                <a href="#">22</a>
                <a href="#">4 killo</a>
                <a href="#">mercato</a>
                <a href="#">Adama</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">reivew</a>
                <a href="#">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+251-600-210-011</a>
                <a href="#">+251 011-909-090</a>

                <a href="#">josephbir@gmail.com</a>
                <a href="#">Addis Ababa, ethiopia </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <div class="credit"> copyright &copy 2022 by Home of foodes </div>

    </section>
</body>

</html>