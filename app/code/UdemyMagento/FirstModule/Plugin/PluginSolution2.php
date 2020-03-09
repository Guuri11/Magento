<?php


namespace UdemyMagento\FirstModule\Plugin;


class PluginSolution2
{
    public function beforeExecute(\UdemyMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "<p>Before execute sort order 20</p>";
    }

    public function afterExecute(\UdemyMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "<p>After execute sort order 20</p>";

    }

    public function aroundExecute(\UdemyMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed)
    {
        echo "<p>Around before proceed sort order 20</p>";
        $proceed();
        echo "<p>Around after proceed sort order 20</p>";
    }
}
