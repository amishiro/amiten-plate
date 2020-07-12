<div class="breadcrumb">
  <ul class="breadcrumb__wrapper" itemscope itemtype="http://data-vocabulary.org/Breadcrumab">
    <li class="breadcrumb__item">
      <a href="" class="breadcrumb__link is-home" itemprop="url">
        <i class="material-icons">home</i>
        <span itemprop="title"><?php echo $meta->siteName; ?> ホーム</span>
      </a>
    </li>
    <?php
    //パンくずに階層がある場合は、設置箇所に以下を記述する
    // $breadcrumbAry = array(
    //   array("test/url/index.php", "パンくず名"),
    //   array("test/url/index.php", "パンくず名")
    // );
    if (!empty($breadcrumbAry)) {
      foreach ($breadcrumbAry as $v) {
        echo '<li class="breadcrumb__item">'.(PHP_EOL);
        echo '<i class="material-icons">chevron_right</i>'.(PHP_EOL);
        echo '<a href="' . $url . $v[0] . '" class="breadcrumb__link" itemprop="url"><span itemprop="title">' . $v[1] . '</span></a>'.(PHP_EOL);
        echo '</li>'.(PHP_EOL);
      }
    };
    ?>
    <li class="breadcrumb__item">
      <i class="material-icons">chevron_right</i>
      <a href="#" class="breadcrumb__link" itemprop="url">
        <span itemprop="title"><?php echo $meta->pageName; ?></span>
      </a>
    </li>
  </ul>
</div>
