<div class="breadcrumb">
  <ul class="breadcrumb__row" itemscope itemtype="http://data-vocabulary.org/Breadcrumab">
    <li class="breadcrumb__item"><a href="<?php echo $baseUrl; ?>/" class="breadcrumb__link home" itemprop="url"><span itemprop="title"><?php echo $siteName; ?> ホーム</span></a></li>
    <?php

    //パンくずに階層がある場合は、設置箇所に以下を記述する
    //$panAry[] = array("/test/url/index.php","パンくず名");
    //$panAry[] = array("/test/url/index2.php","パンくず名2");
    if(!empty($panAry)){
      foreach ($panAry as $key => $value){
        echo '<li class="breadcrumb__item"><a href="'.$baseUrl.$panAry[$key][0].'"  class="breadcrumb__link" itemprop="url"><span itemprop="title">'.$panAry[$key][1].'</span></a></li>';
        echo (PHP_EOL);
      }
    };

    ?>
    <li class="breadcrumb__item"><a href="#" class="breadcrumb__link" itemprop="url"><span itemprop="title"><?php echo $pageTtl; ?></span></a></li>
  </ul>
</div>
