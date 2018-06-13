  @section('header')
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">TimeOut</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="{{Request::is('/')? 'active': ''}}"><a href="/">Home</a></li>
          <li class="{{Request::is('attendances/create')? 'active': ''}}"><a href="/attendances/create">Create</a></li>
          <li class="{{Request::is('attendances')? 'active': ''}}"><a href="/attendances">Register</a></li>
          <li class="{{Request::is('about')? 'active': ''}}"><a href="/about">About Us</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>