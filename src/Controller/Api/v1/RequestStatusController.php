<?php

namespace App\Controller\Api\v1;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Driver\Connection;

class RequestStatusController
{
    
    public function newRequest(Request $request, $applicationId)
    {
        $response = new Response();

        if ($request->headers->get('x-api-key') != '1234569')
        {
            
            $response->setStatusCode(403);
            $response->setContent('<html><body>not authorized!</body></html>');
            return $response;
            
        }
        
            $response->setStatusCode(Response::HTTP_OK);
            $response->setContent('<html><body>Number: '.$applicationId.'</body></html>');
            return $response;
        
    }


}