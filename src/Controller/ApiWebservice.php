<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiWebservice extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max)
    {
       // dump('rrrrrrrrrrrrrrr');exit;
        $path = dirname(__FILE__) . '/../../public/';
        $file = $path . 'orders-test.xml';
       // $file = $path . 'test11.xml';




        if (file_exists($file)) {
            $xml = simplexml_load_file($file);

          //  $xml = new SimpleXmlElement($file);

            foreach ($xml->orders->order as $order) {
                dump($order);
               // print_r($order->marketplace);
                //break;
            }

 //dump($xml);
            //print_r($xml);
        } else {
            exit('Echec lors de l\'ouverture du fichier test.xml.');
        }



        exit;
        //---------------------------------------------------
        $number = random_int(0, $max);
        $path = dirname(__FILE__) . '/../../var/log/';
        $kk = print_r($path, true);

       
        $file = fopen($path .'test1.txt', 'a+');
        $text = "Du texte a ajouter dans le dichier \n voila c'est fait \n";
        fwrite($file, '\n' .$text);

        return new Response(
            '<html><body>Lucky number: '.$number.' <br> Hello World <br></body></html>'
            
            
        );
    }
    /**
     * @Route("/api/{id}", name="app_api")
     */
    public function apiTest($id)
    {
        // dump('rrrrrrrrrrrrrrr');exit;
        $response = new Response();
        $response->setContent(json_encode([
            'data' => [
                'nom' => 'Mohammed',
                'prenom' => 'sghiri',
                'id' => $id
                ],
            'message' => 'Success',
            'code' => 200
        ]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    /**
     * @Route("/api2/{id}", name="app_api2")
     */
    public function apiTest2($id)
    {
        $response = new JsonResponse(
            [
                'data' => [
                    'nom' => 'pascal',
                    'prenom' => 'Gichet',
                    'id' => $id
                ],
                'message' => 'Success',
                'code value' => 200
            ]

        );
        return $response;

    }
}
