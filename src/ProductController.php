<?php

class ProductController
{
    public function processRequest(string $method, ?string $id): void
    {
       if($id) {
        $this->processReourceRequest($method, $id);    
       } else {
        $this->processCollectionRequest($method);
       }
    }

    private function processReourceRequest(string $method, string $id): void
    {

    }

    private function processCollectionRequest(string $method): void
    {
        switch($method) {
            case 'GET':
                echo json_encode(["id"=>"none", "method"=>$method]);
                break;
            case 'POST':
               
                break;
            default:
                http_response_code(405);
                break;
        }
    }

}