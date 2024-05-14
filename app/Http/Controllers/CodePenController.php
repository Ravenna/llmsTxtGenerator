<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodePenController extends Controller
{
    public function typeahead()
    {
        return response()->json('[{"id":1,"title":"The Shawshank Redemption","starring_actor":"Tim Robbins"},{"id":2,"title":"The Godfather","starring_actor":"Marlon Brando"},{"id":3,"title":"The Dark Knight","starring_actor":"Christian Bale"},{"id":4,"title":"Schindler\'s List","starring_actor":"Liam Neeson"},{"id":5,"title":"Pulp Fiction","starring_actor":"John Travolta"},{"id":6,"title":"The Lord of the Rings: The Return of the King","starring_actor":"Elijah Wood"},{"id":7,"title":"Forrest Gump","starring_actor":"Tom Hanks"},{"id":8,"title":"Inception","starring_actor":"Leonardo DiCaprio"},{"id":9,"title":"Fight Club","starring_actor":"Brad Pitt"},{"id":10,"title":"The Matrix","starring_actor":"Keanu Reeves"},{"id":11,"title":"Goodfellas","starring_actor":"Robert De Niro"},{"id":12,"title":"The Silence of the Lambs","starring_actor":"Anthony Hopkins"},{"id":13,"title":"The Lord of the Rings: The Fellowship of the Ring","starring_actor":"Elijah Wood"},{"id":14,"title":"Star Wars: Episode V - The Empire Strikes Back","starring_actor":"Mark Hamill"},{"id":15,"title":"The Green Mile","starring_actor":"Tom Hanks"},{"id":16,"title":"Saving Private Ryan","starring_actor":"Tom Hanks"},{"id":17,"title":"The Lord of the Rings: The Two Towers","starring_actor":"Elijah Wood"},{"id":18,"title":"Interstellar","starring_actor":"Matthew McConaughey"},{"id":19,"title":"Se7en","starring_actor":"Brad Pitt"},{"id":20,"title":"The Usual Suspects","starring_actor":"Kevin Spacey"},{"id":21,"title":"The Lion King","starring_actor":"Matthew Broderick"},{"id":22,"title":"Gladiator","starring_actor":"Russell Crowe"},{"id":23,"title":"The Prestige","starring_actor":"Hugh Jackman"},{"id":24,"title":"The Departed","starring_actor":"Leonardo DiCaprio"},{"id":25,"title":"The Intouchables","starring_actor":"François Cluzet"},{"id":26,"title":"The Pianist","starring_actor":"Adrien Brody"},{"id":27,"title":"Terminator 2: Judgment Day","starring_actor":"Arnold Schwarzenegger"},{"id":28,"title":"Back to the Future","starring_actor":"Michael J. Fox"},{"id":29,"title":"Whiplash","starring_actor":"Miles Teller"}]');
    }
}
