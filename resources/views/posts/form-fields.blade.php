
       <label>
        Title <br>
        <input name="title" type="text" value="{{old('tiltle', $post-> title)}}"> 
        
        @error('title')
            <br>   
            <small style="color: red" >{{$message}}</small>    
       
        @enderror
    </label> 
    <label><br>
        Body <br>
        <textarea name="body">{{old('body', $post-> body)}}</textarea>
        
        @error('body')
        <br>   
        <small style="color: red" >{{$message}}</small>    
   
        @enderror

    </label><br>  