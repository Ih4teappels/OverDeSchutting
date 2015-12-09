<div id="wrapper">

    <div id="pagWrapper">
        <?php
                    include 'models/pagination.php';
        ?>
    </div>


    <div id="pageWrapper">
        <div id="list5">
            <h2 id="pageHeader">Prijsvraag</h2>
        

        <?php
            require 'models/select_prijsvraag.php';
        ?>
        <div id="debuutVraag">
        <h3>VRAAG </h3>
        <h3 id="question">  Wat was het debuut album van Julien Clerc?</h3>
        </div>

        <h2 id="pageHeader">Doe mee aan deze prijsvraag</h2>

        <!-- <form id="quizForm"> -->

            <p>Naam </p><input id="quizInput" type="text" name="user"><br>
            <p>E-mail </p><input id="quizInput" type="text" name="user"><br>
            <p>Antwoord </p><input id="quizInput" type="text" name="user"><br>

            <input type="submit">
        <!-- </form> -->
    </div>

        <?php
            include 'views/sidebar.php';
        ?>

    </div>

</div>