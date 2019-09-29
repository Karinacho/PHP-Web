<?php


namespace app\Http;


use app\Data\ProductDTO;
use app\Service\CategoryServiceInterface;
use app\Service\ProductServiceInterface;

class ProductHttpHandler extends HttpHandlerAbstract
{
    public function addProduct(ProductServiceInterface $productService,CategoryServiceInterface $categoryService,$formData){
        if(isset($formData['add'])){
            $this->handlerAddProductProcess($productService,$categoryService, $formData);
        }
        else{

            $this->render('products/add',$categoryService->findAll());
        }
    }

    private function handlerAddProductProcess(ProductServiceInterface $productService,CategoryServiceInterface $categoryService, $formData)
    {

        $categoryDTO= $categoryService->findOneByName($formData['category']);
        /** @var ProductDTO $product */
        $product  = $this->dataBinder->bind($formData,ProductDTO::class);
        $product->setCategory($categoryDTO->getId());

       if($productService->add($product)){
           $this->redirect('index.php');
       }else{
           $this->render('home/index');
       }
    }
}