<view>
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll">
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
    </ul>
    <form class="d-flex my-0">
      <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Поиск">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  </section>
</nav>
</view>
<edit header="Меню навигации">
<wb-include wb-src="common.inc.php" />
</edit>