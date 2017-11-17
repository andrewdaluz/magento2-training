<?php
namespace Training\Test\App;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList 
     */
    protected $_routerList;
    
    /**
     * @var \Magento\Framework\App\Response\Http      
     */
    protected $response;
    
    /**
     * @var \Psr\Log\LoggerInterface      
     */
    protected $logger;
    
    /**      
     * @param \Magento\Framework\App\RouterList $routerList      
     * @param \Magento\Framework\App\Response\Http $response      
     * @param \Psr\Log\LoggerInterface $logger      
     */
    public function __construct(
    	\Magento\Framework\App\RouterListInterface $routerList, 
    	\Magento\Framework\App\ResponseInterface $response, 
    	\Psr\Log\LoggerInterface $logger
    ) {
        $this->_routerList = $routerList;
        $this->response   = $response;
        $this->logger     = $logger;
    }
    
    /**      
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface      
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
    	$routingCycleCounter = 0;
 		while (!$request->isDispatched() && $routingCycleCounter++ < 100) {
        	foreach ($this->_routerList as $router) {
            	$this->logger->addDebug(get_class($router));
        	}
        }
       
        return parent::dispatch($request);
    }
} 