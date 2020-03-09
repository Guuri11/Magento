<?php


namespace UdemyMagento\FirstModule\Plugin;


class PluginSolution
{
    public function beforeExecute(\UdemyMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "<p>Before execute sort order 10</p>";
    }

    public function afterExecute(\UdemyMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "<p>After execute sort order 10</p>";

    }

    public function aroundExecute(\UdemyMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed)
    {
        echo "<p>Around before proceed sort order 10</p>";
        $proceed();
        echo "<p>Around after proceed sort order 10</p>";
    }

    /*public function beforeSetName(\Magento\Catalog\Model\Product $subject,string $name){
    //    return 'Before Plugin '.$name;
    //}

    //public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
     //   return $result.' after plugin';
    //}
    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        echo 'before proceed';
        $name = $proceed();
        echo $name;
        echo 'after proceed';
        return $name;
    }

    public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, $sku)
    {
        echo 'before proceed';
        $id = $proceed($sku);
        echo $id;
        echo 'after proceed';
        return $id;
    }*/
}
