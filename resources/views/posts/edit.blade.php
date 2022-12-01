
<x-layouts.app 
    
    :title="$post-> title"
    :meta-description="$post -> body">
    
    <h1>Edit Form</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
 
        <label>
             Title <br>
             <input name="title" type="text" value="{{old('tiltle',$post -> title)}}"> 
             
             @error('title')
                 <br>   
                 <small style="color: red" >{{$message}}</small>    
            
             @enderror
         </label> 
         <label><br>
             Body <br>
             <textarea name="body">{{old('body',$post-> body)}}</textarea>
             
             @error('body')
             <br>   
             <small style="color: red" >{{$message}}</small>    
        
             @enderror
 
         </label><br>    
         <button type="submit">Enviar</button>
         <br><br>
                      
     </form>
     <br>
     <a href="{{route('posts.index')}}">Regresar</a>


    </x-layouts.app>     