<nav class="nav flex-column">
  <h5>Каталог материалов</h5>
  @foreach($leftmenu as $leftmenus)
    @php
      $isActive = null;
        if(url("katalog-materialov/{$leftmenus->slug}") == url()->current()){
                $isActive = 'active';
            }
    @endphp
    <a class="nav-link {{ $isActive }}" href="/katalog-materialov/{{ $leftmenus->slug }}">{{ $leftmenus->title }}</a>
  @endforeach
</nav>