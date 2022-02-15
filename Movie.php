<?php
class Movie
{
    protected $title;
    protected $director;
    protected $year;
    protected $cast;
    protected $description;
    protected $vote;

    // setter functions
    public function set_title($input_title)
    {
        $this->title = $input_title;
    }

    public function set_director($input_director)
    {
        $this->director = $input_director;
    }

    public function set_year($input_year)
    {
        if (is_int($input_year) && $input_year >= 1895 && $input_year <= intval(date("Y"))) {
            $this->year = $input_year;
        }
    }

    public function set_cast($input_cast)
    {
        $this->cast = $input_cast;
    }

    public function set_description($input_description)
    {
        $this->description = $input_description;
    }

    public function set_vote($input_vote)
    {
        if ($input_vote >= 0 && $input_vote <= 5) {
            $this->vote = $input_vote;
        }
    }
    // getter functions
    public function get_title()
    {
        return $this->title;
    }

    public function get_director()
    {
        return $this->director;
    }

    public function get_year()
    {
        return $this->year;
    }

    public function get_cast()
    {
        return $this->cast;
    }

    public function get_description()
    {
        return $this->description;
    }

    public function get_vote()
    {
        return $this->vote;
    }
    // construc class
    function __construct($movie_title, $movie_director, $movie_year)
    {
        $this->set_title($movie_title);
        $this->set_director($movie_director);
        $this->set_year($movie_year);
    }
}

$movies = [new Movie("Cado dalle Nubi", "Non conosco il regista di sto film", 2020), new Movie("Non mi viene in mente un altro film", "Nemmeno un altro regista", 1923)];

$movies[0]->set_cast(["Leonardo Di Caprio", "Ciro Immobile", "Donna Femminista"]);
$movies[1]->set_description("Film bellissimo con tutto bellisimo e niente.......... ");
$movies[1]->set_vote(4.999999);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP primo smanettamento</title>
</head>

<body>
    <h1>OOP-Movies</h1>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <h2><?= $movie->get_title() ?></h2>
                <h3><?= $movie->get_director() ?></h3>
                <h3><?= $movie->get_year() ?></h3>
                <?php if (!empty($movie->get_description())) : ?>
                    <h4>Descrizione:</h4>
                    <p><?= $movie->get_description() ?></p>
                <?php endif ?>
                <?php if (!empty($movie->get_cast())) : ?>
                    <h4>Cast:</h4>
                    <ul>
                        <?php foreach ($movie->get_cast() as $actor) : ?>
                            <li><?= $actor ?></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
                <?php if (!empty($movie->get_vote())) : ?>
                    <h4>Voto: <?= $movie->get_vote() ?></h4>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>