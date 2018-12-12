<div class="row">
  <div class="col-md-8">
    <h6 class="section-subtitle font-weight-bold">Passion, dedication, and a lot of coffee</h6>
    <h2 class="section-title h1">Why Renzchler?</h2>
    <hr class="left">
    <p class="grey-text mb-5">Experience in creating responsive and dynamic websites from scratch. Practice programming principles. Use git for version control of projects. Involve with projects such as e-commerce, blog and social media sites. Knowledgeable in both front-end and back-end technologies such as JavaScript, AJAX and PHP etc. Have used different frameworks, Laravel and JQuery. Active in developer community. With a positive attitude, passion and eager to learn new technologies.</p>
    <div class="row">

       <div class="col-md-6 mb-5">
        <div class="media">
          <div class="media-icon p-2 mr-3">
            <img class="img-fluid media-icon-img" src="{{ asset('svg/trust.webp') }}" alt="Responsive design">
          </div>
          <div class="media-body">
            <h4 class="mt-0 h5">Trustworthy</h4>
            <p class="grey-text">
              I won't let you down. 
            </p>
          </div>
        </div>
      </div>

       <div class="col-md-6 mb-5">
        <div class="media">
          <div class="media-icon p-2 mr-3">
            <img class="img-fluid media-icon-img" src="{{ asset('svg/gauge.webp') }}" alt="Responsive design">
          </div>
          <div class="media-body">
            <h4 class="mt-0 h5">Dedicated</h4>
            <p class="grey-text">
              Pressure and stress? I love challenges.             
            </p> 
          </div>
        </div>
      </div>


      <div class="col-md-6 mb-5">
        <div class="media">
          <div class="media-icon p-2 mr-3">
            <img class="img-fluid media-icon-img" src="{{ asset('svg/team.webp') }}" alt="Responsive design">
          </div>
          <div class="media-body">
            <h4 class="mt-0 h5">Team Player</h4>
            <p class="grey-text">
              Contribute is a must. Do extra miles.
            </p>
          </div>
        </div>
      </div>


      <div class="col-md-6 mb-5">
        <div class="media">
          <div class="media-icon p-2 mr-3">
            <img class="img-fluid media-icon-img" src="{{ asset('svg/box.webp') }}" alt="Responsive design">
          </div>
          <div class="media-body">
            <h4 class="mt-0 h5">Resourceful</h4>
            <p class="grey-text">
              Google is not enough. Think outside the box.
            </p>
          </div>
        </div>
      </div>


     
     

    </div>
  </div>
  <div class="col-md-4">
    <img src="{{ asset('svg/responsive.png') }}" class="img-fluid mb-5" style="object-fit: cover">

    <div class="text-center">
      <h4 class="h5">Recent Projects</h4>
      <ul class="list-unstyled">
        @foreach (App\Project::recent() as $project)
         <li> <a href="{{ route('projects.show', ['project' => $project->slug]) }}" class="grey-text">{{$project->name}}</a></li>
        @endforeach
      </ul>
    </div>
    
  </div>
</div>