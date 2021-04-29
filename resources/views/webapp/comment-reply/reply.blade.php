@forelse ($comments->reply as $replies)
<li class="comment">

     <div class="user-thumb"> <img src="{{ asset('/') }}assets/webapp/images/auser.jpg" alt=""></div>
     <div class="comment-txt">
         <h6>{{ $replies->user->name}}</h6>
         <p>{{ $replies->details}}</p>
         <ul class="comment-time">
             <li>Posted: {{ $replies->created_at->format('d M Y, D')}}</li>
             <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
         </ul>
     </div>
</li>
 @empty
 @endforelse
