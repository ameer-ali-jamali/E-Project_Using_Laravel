@extends('main')
@section('title', 'About')

@section('content')


<head>
    <style>
        /* Add some styling to the page */
        body {
            background-color: #F1F1F1;
            font-family: Arial, sans-serif;
            color: #333333;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            color: #6200EE;
            margin-top: 50px;
        }

        .about-section {
            max-width: 800px;
            margin: auto;
            text-align: center;
            padding: 50px;
            background-color: #FFFFFF;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .about-section h2 {
            font-size: 24px;
            color: #6200EE;
            margin-bottom: 30px;
        }

        .about-section p {
            font-size: 18px;
            line-height: 1.5;
            color: #666666;
            margin-bottom: 30px;
        }

        .logo {
            display: block;
            margin: auto;
            margin-bottom: 50px;
            width: 200px;
            height: 200px;
        }
    </style>
</head>

<body>
    <h1>E-Books</h1>

    <div class="about-section">
        <img class="logo" src="images/a.jpg" alt="Company Logo">
        <h2>Our Mission</h2>
        <p>Our mission is to provide access to a vast collection of books to individuals everywhere, enabling them to
            expand their
            knowledge and improve their lives. We are committed to making knowledge freely accessible by providing a
            user-friendly
            platform for users to easily search, find and download books without any barriers. We believe in the power
            of education
            and strive to make a positive impact on the world by supporting literacy initiatives and promoting a love of
            learning.</p>
        <h2>Our Story</h2>
        <p>"Our Story" section for a free books download website:

            "Our journey began with a passion for books and a desire to make a difference. We saw a need for a platform
            where people
            could easily access a vast collection of books for free, without any barriers. We were determined to make
            this a
            reality, and thus the idea for our website was born.

            Since then, our team has been dedicated to constantly improving our platform and adding new features to make
            the book
            downloading experience as seamless as possible. Our website has grown over the years, and we are now proud
            to offer a
            vast collection of books for users to choose from.

            We believe in giving back to the community and making a positive impact on the world. That's why a portion
            of our
            profits goes towards supporting literacy initiatives around the world. We believe that education is a
            powerful tool, and
            we strive to make it accessible to everyone.

            As we continue to grow and evolve, our commitment to providing access to knowledge remains at the core of
            everything we
            do. We are grateful to our users for their support and look forward to serving the needs of the book-loving
            community
            for years to come.</p>
    </div>
</body>

</html>

@endsection