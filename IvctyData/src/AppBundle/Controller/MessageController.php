<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\ProductImage;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use AppBundle\Entity\Message;

class MessageController extends Controller {
	
	
	public function createAction(Request $request) {
		
	
		$message = new Message();
		
	
		
		// tells Doctrine you want to (eventually) save the Product (no queries yet)


		
		$sender = $request->request->get ( "sender" );
		$productID = $request->request->get ( "productID" );
		$isNew = true; 
		$lieferArt = $request->request->get ( "lieferArt" );
		
		$stueckzahl = $request->request->get ( "stueckzahl" );

		if($lieferArt == null) {
            $lieferArt = "";
		}
		if($stueckzahl == null) {
            $stueckzahl = "";
		}

		
		$messageText = $request->get ( "message" );
		
		$repository = $this->getDoctrine()->getRepository('AppBundle:Product');
		$product = $repository->findOneById($productID);

						
		$message->setSender($sender);
		$message->setProduct($product);
	
		$message->setNew($isNew);
		$message->setLieferArt($lieferArt);
		$message->setStueckzahl($stueckzahl);
		$message->setMessage($messageText);
		
		
		
		$em = $this->getDoctrine ()-> getManager ();
		$em->persist ( $message );
		
		// actually executes the queries (i.e. the INSERT query)
		$em->flush ();
		
		
			
	//	$this->getRequest()->getSession()->setFlash('notice', "your_message");
		
		return new Response("created");
	
				
	}
	
	
	public function listAction(Request $request) {

        $allProductsOfRecipient = null;
        $messages = null;
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Message');

        $recipient = $request->get("recipient");


        if($recipient == null) {
            $sender = $request->get("sender");

            $query = $repository->createQueryBuilder('p')
                ->where('p.sender = :id')
                ->setParameter('id', $sender)->getQuery();


            $messages =  $query->getResult();

        } else {

            $allProductsOfRecipient = $em->createQuery("SELECT p.id FROM AppBundle:Product p WHERE p.owner = ".$recipient)->getScalarResult();




            $query = $repository->createQueryBuilder('p')
                ->where('p.product IN (:ids)')
                ->setParameter('ids', $allProductsOfRecipient)->getQuery();


            $messages =  $query->getResult();
        }

		//$myArray = $this->prepareQuery($request);
		
		
		



	
			
		$jsonContent = $this->generateJSONContentByEntity($messages);
			
		return new Response($jsonContent);
			
			
	
	}
	
	
	public function prepareQuery($request) {
	
		$myArray = [];
	
	    $recipient = $request->get("recipient");
	
	
	
		if($recipient != null) {
			$myArray['recipient'] = $recipient;
		}
	
		return $myArray;
	
	}
	
	public function generateJSONContentByEntity($object) {
	
	
		$normalizer = new ObjectNormalizer();
		$normalizer->setCircularReferenceHandler(function ($object2) {
	
		});
	
			$encoder = new JsonEncoder();
	
			$serializer = new Serializer(array($normalizer), array($encoder));
	
			$jsonContent = $serializer->serialize($object, 'json');
				
			return $jsonContent;
	
	}

}

