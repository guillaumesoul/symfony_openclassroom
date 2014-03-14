<?php
/**
 * Created by PhpStorm.
 * User: guillaumesoullard1
 * Date: 12/03/2014
 * Time: 10:27
 */

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller {

    public function indexAction () {


        //premiere reponse
        //return new Response('Hello the world');

        //redirection vers la vue Blog index.html.twig
        //return $this->render("SdzBlogBundle:Blog:index.html.twig", array('variable'=>'contenu de la variable'));

        //chap 2.4.5/**/
        // Les articles :
        $articles = array(
            array(
                'titre'   => 'Mon weekend a Phi Phi Island !',
                'id'      => 1,
                'auteur'  => 'winzou',
                'contenu' => 'Ce weekend était trop bien. Blabla…',
                'date'    => new \Datetime()),
            array(
                'titre'   => 'Repetition du National Day de Singapour',
                'id'      => 2,
                'auteur' => 'winzou',
                'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
                'date'    => new \Datetime()),
            array(
                'titre'   => 'Chiffre d\'affaire en hausse',
                'id'      => 3,
                'auteur' => 'M@teo21',
                'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
                'date'    => new \Datetime())
        );

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
        return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
            'articles' => $articles
        ));

        /*return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
            'articles' => array()
        ));*/

        /*$id = 5;
        //On veut avoir l'url de l'article d'id $id
        $url = $this->generateUrl('sdzblog_voir', array('id' => $id));
        //redirection vers l'url de l'article
        return $this->redirect($url);*/

    }

/*    public function indexAction($page)
    {
        // On ne sait pas combien de pages il y a
        // Mais on sait qu'une page doit être supérieure ou égale à 1
        if( $page < 1 )
        {
            // On déclenche une exception NotFoundHttpException
            // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
            throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
        }

        // Ici, on récupérera la liste des articles, puis on la passera au template

        // Mais pour l'instant, on ne fait qu'appeler le template
        return $this->render('SdzBlogBundle:Blog:index.html.twig');
    }*/

/*    public function voirAction($id) {
        //return new Response("Affichage de l'article : ".$id);

        //On récupère la requete
        //$request = $this->container->get('request_stack')->getCurrentRequest();
        //on récupère notre tag
        //$tag = $request->query->get('tag');
        //return new Response("affichage de l'article d'id : ".$id." et de tag : ".$tag);


        // tuto chap 2.3.3 construction objet reponse
        //création de la réponse
        $response = new Response();
        //définition du contenu
        $response->setContent("Ceci est une page d'erreur 404");
        //définition du code http
        $response->setStatusCode(404);
        return $response;


        //tuto chap 2.3.3 reponses et vues
        // On utilise le raccourci : il crée un objet Response
        // Et lui donne comme contenu le contenu du template
        return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('id'  => $id));

        //tuto chap2.3.3 réponse et redirection
        return $this->redirect($this->generateUrl('sdzblog_accueil', array('page' => 2)));

        //chap 2.3.3 changer le content-type de la réponse
        //creation de la reponse json
        $response = new Response(json_encode(array('id' =>$id)));
        //definition du content-type pour lui indiquer qu'on lui envoi du json
        $response->headers->set('Content-Type', 'application/json');
        return $response;

        //chap 2.3.4 les différents services
        //Accéder aux services

        //Récupération du service
        $mailer = $this->get('mailer');
        //création de l'email : utilisation de swift mailer
        $message = \Swift_Message::newInstance()
            ->setSubject("hello zero!")
            ->setFrom("tutorial@symfony2.com")
            ->setTo("guillaume.soullard@gmail.com")
            ->setBody("corps de mon message");

        //service mailer -> utilisation de sa methode send()
        $mailer->send($message);
        //réponse : page affiche message bien envoye
        return new Response("Votre email a bien té envoyé");

        //Liste des services templating
        //récupération du service
        $templating = $this->get('session');
        //récupération du contenu de la variable user_id
        $user_id = $this->get('user_id');
        //définition du nouvelle valeur pour cette variable
        $user_id = $this->set('user_id', 91);
        return new Response("j'ecris ce que je veux en reponse");


    }*/

    /*public function voirAction($id)
    {
        // Ici, on récupérera l'article correspondant à l'id $id

        return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
            'id' => $id
        ));
    }*/

    //chap 2.4.5 template voir un article
    public function voirAction($id) {

        $article = array(
            'id'      => 1,
            'titre'   => 'Mon weekend a Phi Phi Island !',
            'auteur'  => 'winzou',
            'contenu' => 'Ce weekend était trop bien. Blabla…',
            'date'    => new \Datetime()
        );

        return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('article' => $article));
    }

    /*public function ajouterAction()
    {
        // Bien sûr, cette méthode devra réellement ajouter l'article
        // Mais faisons comme si c'était le cas
        $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');

        // Le « flashBag » est ce qui contient les messages flash dans la session
        // Il peut bien sûr contenir plusieurs messages :
        $this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');

        // Puis on redirige vers la page de visualisation de cet article
        return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );
    }*/

    public function ajouterAction()
    {
        // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

        if( $this->get('request')->getMethod() == 'POST' )
        {
            // Ici, on s'occupera de la création et de la gestion du formulaire

            $this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');

            // Puis on redirige vers la page de visualisation de cet article
            return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
    }

    public function modifierAction($id)
    {
        // Ici, on récupérera l'article correspondant à $id

        // Ici, on s'occupera de la création et de la gestion du formulaire

        $article = array(
            'id'      => 1,
            'titre'   => 'Mon weekend a Phi Phi Island !',
            'auteur'  => 'winzou',
            'contenu' => 'Ce weekend était trop bien. Blabla…',
            'date'    => new \Datetime()
        );

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
            'article' => $article
        ));
    }

    public function supprimerAction($id)
    {
        // Ici, on récupérera l'article correspondant à $id

        // Ici, on gérera la suppression de l'article en question

        return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
    }

    public function menuAction($nombre)
    {
        // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
        $liste = array(
            array('id' => 2, 'titre' => 'Mon dernier weekend !'),
            array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
            array('id' => 9, 'titre' => 'Petit test')
        );

        return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
            'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
        ));
    }
    /*test*/
}