<?php
namespace Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Form;

/**
 * Interceptor class for @see \Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Form
 */
class Interceptor extends \Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Controller\Adminhtml\Product\Builder $productBuilder, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper $initializationHelper)
    {
        $this->___init();
        parent::__construct($context, $productBuilder, $initializationHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
