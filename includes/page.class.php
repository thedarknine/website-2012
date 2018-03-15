
<?php
//! @file page.class.php
//! @author Caro Noyer
//! @date 2012-09-09

require_once 'Smarty/Smarty.class.php';
require_once 'reCaptcha/recaptchalib.php';

class Page
{
    public $mSmarty;
    public $mRequestPage;

    public function  __construct()
    {
        // Create Smarty object
        include_once 'smarty.ini.php';
        assert($smartyconf);
        $location = getcwd();
        $this->mSmarty = new Smarty();
        $this->mSmarty->template_dir = $location.'/'.$smartyconf['templatedir'];
        $this->mSmarty->compile_dir = $location.'/'.$smartyconf['compiledir'];
        
        // Load request page
        include_once 'conf.ini.php';
        
        // Check requested page
        if (isset($_GET['page']) && $_GET['page']) {
            $this->mRequestPage = $_GET['page'];
        } else {
            $this->mRequestPage = $config['website']['pagedft'];
        }

        // Load title
        if ($config['website']['title']) {
            $this->mSmarty->assign(
                'title', 
                $config['website']['title'].' | '.$config['menu'][$this->mRequestPage]['title']);
        } else {
            $this->mSmarty->assign(
                'title', 
                '');
        }
        // Load description
        if ($config['website']['description']) {
            $this->mSmarty->assign(
                'description', 
                $config['website']['description']);
        } else {
            $this->mSmarty->assign(
                'description', 
                '');
        }
        // Load keywords
        if ($config['website']['keywords']) {
            $this->mSmarty->assign(
                'keywords', 
                $config['website']['keywords']);
        } else {
            $this->mSmarty->assign(
                'keywords', 
                '');
        }
        
        // Generate menu
        if ($config['menu']) {
    		foreach ($config['menu'] as $key =>$item) {
    			if ($item['show'] == 'yes') {
    				$menu[$key] = $item;
    			}
    		}

            $menu[$this->mRequestPage]['active'] = true;
            $this->mSmarty->assign('menu', $menu);
            $this->mSmarty->fetch($this->mSmarty->template_dir.'/menu.tpl');
        }

        // Check if a class for this page exists
        $clsFile =
            $config['website']['pagedir'].
            $this->mRequestPage.'/'.
            $this->mRequestPage.'.inc.php';
        if (file_exists($clsFile)) {
            include_once $clsFile;
        }

        // Check if data for this page exists
        $datFile =
            $config['website']['pagedir'].
            $this->mRequestPage.'/'.
            $this->mRequestPage.'.data.php';
        if (file_exists($datFile)) {
            include_once $datFile;
            $this->mSmarty->assign('data', $data);
        }
        
        // Check if an header is defined for this page
        $hdrFile =
            $config['website']['pagedir'].
            $this->mRequestPage.'/'.
            $this->mRequestPage.'.header.tpl';
        if (file_exists($hdrFile)) {
            $this->mSmarty->assign('header', $hdrFile);
        }

        // Check if template exists
        $tplFile =
            $config['website']['pagedir'].
            $this->mRequestPage.'/'.
            $this->mRequestPage.'.tpl';
        if (!file_exists($tplFile)) {
            $tplFile = $config['website']['pagedir'].'error.tpl';
        }
       
	   $this->mSmarty->assign('page', $tplFile);
    }
	
	public function getRequestPage()
	{
		if ($this->mRequestPage !== '' && $this->mRequestPage !== null) {
			return $this->mRequestPage;
		}
		
		return null;
	}
}
?>
