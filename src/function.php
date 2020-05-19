<?php

#-------- settings -------#

#1) [ $baseUrl ]を、ディレクトリ構成に合わせて修正してください
$baseUrl = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__FILE__));

#2) 開発環境に合わせて、エラーハンドリングしてください
ini_set('display_errors', 1);

#3）開発環境に合わせて、サーバーのフルパスを取得してください
$incPatch = (dirname(__FILE__));

// links --------------------------------
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $baseUrl;
$css = $baseUrl . "/_assets/css";
$img = $baseUrl . "/_assets/img";
$inc = $incPatch . "/_assets/inc";
$js = $baseUrl . "/_assets/js";

// html metas --------------------------------
$meta = new MetaClass();
$meta->siteName = "サイトタイトル";
$meta->siteDesc = "サイトディスクリプション";
$meta->siteImg = "opg-image.png";

#-------- classes -------#

// bodyClass
class BodyClass
{
  public $addClass;
  public $dirs;
  public $files;
  public function __construct($add = '')
  {
    $path = pathinfo($_SERVER['REQUEST_URI']);
    $ary = explode("/", $path['dirname']);
    $this->dirs = implode(" ", $ary);
    $this->files = $path['filename'];
    $this->addClass = $add;
  }
  function output()
  {
    echo $this->addClass . $this->dirs . ' ' . $this->files;
  }
}

// metaClass
class MetaClass
{
  public $siteName;
  public $siteDesc;
  public $siteImg;
  public $pageName;
  public $pageDesc;
  public $pageImg;
  function title()
  {
    if ($this->pageName) {
      echo $this->pageName . " - " . $this->siteName;
    } else {
      echo $this->siteName . " - サブタイトル";
    }
  }
  function desc()
  {
    if ($this->pageDesc) {
      echo $this->pageDesc;
    } elseif ($this->pageName) {
      echo "「" . $this->siteName . "」の" . $this->pageName . "ページです。" . $this->siteDesc;
    } else {
      echo $this->siteDesc;
    }
  }
  function ogpImg()
  {
    if ($this->pageImg) {
      return $this->pageImg;
    } else {
      return $this->siteImg;
    }
  }
}
