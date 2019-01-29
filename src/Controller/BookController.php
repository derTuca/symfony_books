<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;

class BookController extends Controller
{
    /**
     * @Route("/books", name="books")
     */
    public function index()
    {
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();
        return $this->json($books);
        //return $this->json([
        //    'message' => 'Welcome to your new controller!',
        //    'path' => 'src/Controller/BookController.php',
        //]);
    }
}
