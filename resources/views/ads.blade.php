@extends('welcome')

@section('content')
   <div class="container">
      <div class="row">

         <div class="col-md-3"></div>
         <div class="col-md-6">
            <form action="{{ route('ad.search') }}" method="post" onsubmit="search(event)" id="searchForm">
               @csrf
               <div class="form-group mt-3">
                  <table class="table table-borderless">
                     <tr>
                        <td><input type="search"  class="form-control" id="words" placeholder="Rechercher..." style="width:100%;border-radius:20px;"></td>
                        <td><button type="submit" class="btn btn-light "><i class="fa-solid fa-magnifying-glass"></i></button></td>
                     </tr>
                  </table>
               </div>
            </form>
         </div>
        <div class="col-md-3"></div>
        
         <div class="row bg-light pt-4"  id="results" style="border-radius:5px;"> 
            @foreach($ads as $ad)
              <div class="col-xl-2 col-lg-3 col-md-3 fl col-sm-6 col-6">

                  <div class="card text-center bg-light" style="height:350px;margin-bottom:7px;border:none;">
                     <img class="card-img-top img-fluid" style="max-height:55%;object-fit:cover;border-radius:30px;"
                                             src="https://th.bing.com/th/id/OIP.p86rdRHFhLipxNkZYCmH7wHaKs?w=205&h=296&c=7&r=0&o=5&pid=1.7"
                     alt="Card image"style="">
                     <div class="card-body">
                           <h6 class="card-title">{{ $ad->title }}</h6>
                           <h6 class="card-text my-3 text-success"><em style="border-radius:20px; padding:7px;box-shadow:0 0 2px silver;font-weight:bold;filter:drop-shadow(0 0 2px silver);background-color:rgba(0, 255, 0,0.3);">{{ $ad->price }} F</em></h6>
                           <h6 class="card-text">{{ $ad->localisation }}</h6>
                           <small class="card-text text-success">{{ Carbon\Carbon::parse($ad->created_at)->diffForHumans() }}</small>
                           
                     </div>
                  </div>
              </div> 
              <div class="col-xl-2 col-lg-3 col-md-3 fl col-sm-6 col-6">
                   <div class="card text-center bg-light" style="height:350px;margin-bottom:7px;border:none;">
                     <img class="card-img-top img-fluid" style="max-height:55%;object-fit:cover;border-radius:30px;"
                                             src="https://th.bing.com/th/id/OIP.sqk4JXHM2tD5THJH33XqbAHaJQ?w=208&h=260&c=7&r=0&o=5&dpr=1.05&pid=1.7"
                     alt="Card image">
                     <div class="card-body">
                           <h6 class="card-title" style="color:#1B0101;">{{ $ad->title }}</h6>
                           <h6 class="card-text my-3 text-success"><em style="border-radius:20px;font-weight:bold; padding:7px;box-shadow:0 0 2px silver;filter:drop-shadow(0 0 2px silver);background-color:rgba(0, 255, 0,0.3);">{{ $ad->price }} F</em></h6>
                           <h6 class="card-text">{{ $ad->localisation }}</h6>
                           <small class="card-text text-success">{{ Carbon\Carbon::parse($ad->created_at)->diffForHumans() }}</small>
                           
                     </div>
                  </div>
               </div> 
              <div class="col-xl-2 col-lg-3 col-md-3 fl col-sm-6 col-6">

               
                  <div class="card text-center bg-light" style="height:350px;margin-bottom:7px;border:none;">
                     <img class="card-img-top img-fluid" style="max-height:55%;object-fit:cover;border-radius:30px;"
                                             src="https://th.bing.com/th/id/OIP.i3J4LIGKhxd3eT6Q98NHBQHaLH?w=204&h=306&c=7&r=0&o=5&dpr=1.05&pid=1.7"
                     alt="Card image"style="">
                     <div class="card-body">
                           <h6 class="card-title" style="color:#1B0101;">{{ $ad->title }}</h6>
                           <h6 class="card-text my-3 text-success"><em style="border-radius:20px; padding:7px;box-shadow:0 0 2px silver;font-weight:bold;filter:drop-shadow(0 0 2px silver);background-color:rgba(0, 255, 0,0.3);">{{ $ad->price }} F</em></h6>
                           <h6 class="card-text">{{ $ad->localisation }}</h6>
                           <small class="card-text text-success">{{ Carbon\Carbon::parse($ad->created_at)->diffForHumans() }}</small>
                           
                     </div>
                  </div>

               </div>
               @endforeach
           </div>
            
        </div>    
      <div style="bottom:10px;color:black;margin:0 auto">{{ $ads->links() }}</div>
   </div>
@endsection

@section('extra-js')
<script> 
     function search(event){
       event.preventDefault()
       const words = document.querySelector('#words').value;
       //console.log(words);
       const url = document.querySelector('#searchForm').getAttribute('action');
      //  console.log(url);
       axios.post(`${url}`, {
         words: words,
         
       })
       .then(function(response){
         //  console.log(response);
         const ads = response.data.ads;
         let results = document.querySelector('#results');
         results.innerHTML = '';
         for (let i = 0; i < ads.length; i++) {
            
             // let row = document.createElement('div');
            // row.classList.add('row');
            let col = document.createElement('div');
            col.classList.add('col-xl-2', 'col-lg-3', 'col-md-3',  'col-sm-6', 'col-6');
            let cardBody = document.createElement('div');
            cardBody.classList.add('card-body');
            let card = document.createElement('div');
            card.classList.add('card', 'mb-3');
            let image = document.createElement('h5');
            image.classList.add('card-img-top');
            image.innerHTML = ads[i].image;
            let title = document.createElement('h5');
            title.classList.add('card-title');
            title.innerHTML = ads[i].title;
            let description = document.createElement('p');
            description.classList.add('card-text');
            description.innerHTML = ads[i].description;
            cardBody.appendChild(image);
            cardBody.appendChild(title);
            cardBody.appendChild(description);
            card.appendChild(cardBody);
            col.appendChild(card);

            results.appendChild(col);
            
         }
       })
       .catch(function(error){
         console.log(error);
       })
     }
   </script>
@endsection
