<view>
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="{{id}}">
  <a class="navbar-brand" href="/">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">

  <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" wb-tree="call=siteMenu">
        <li class="nav-item {{divider}}" >
            <a class="nav-link"  href="{{path}}">{{header.{{_lang}}}}</a>
        </li>
  </ul>
  <wb-jq wb="$dom->find('.navbar-nav li ul')->addClass('dropdown-menu')
      ->parent('li')->addClass('dropdown')
      ->children('.nav-link')
      ->addClass('dropdown-toggle')
      ->attr('data-toggle','dropdown');" />
  <wb-jq wb="$dom->find('.navbar-nav li.divider-after')->after('<div />')->next()->addClass('dropdown-divider')"/>
  <wb-jq wb="$dom->find('.navbar-nav li:not(.dropdown) .nav-link')->removeAttr('data-toggle');"/>
  

    <!--ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll">
      <li class="nav-item active">
        <a class="nav-link" href="#">Главная <span class="sr-only">(текущая)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ссылка</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Link
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="#">Действие</a></li>
          <li><a class="dropdown-item" href="#">Другое действие</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Ссылка</a>
      </li>
    </ul-->
    <!--form class="d-flex my-0">
      <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Поиск">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form-->
  </div>
</nav>
</section>
</view>
<edit header="Меню навигации">
    <div>
        <wb-include wb-src="common.inc.php" />
    </div>
</edit>