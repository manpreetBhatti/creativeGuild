import React from 'react';
import './css/App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import Bio from './Bio.js';
import Album from './Album.js';
import axios from 'axios';

class App extends React.Component {
  constructor(props) {
      super(props);
      this.state = {
        name: '',
        bio: '',
        profile_picture: '',
        phone: '',
        email:'',
        album: [],
        showDetails: false,
      }
  } 
  componentDidMount()
  {
    let base = this;
    axios.get('/api/1')
    .then(function(response){
      if(response.data.name)
      {
        base.setState({
          name: response.data.name,
          bio: response.data.bio,
          profile_picture: response.data.profile_picture,
          phone: response.data.phone,
          email: response.data.email,
          album: response.data.albums,
          showDetails: true
        });
      }
    });
  }
  render(){
    return (
      <div className="App">
        {this.state.showDetails?<div>
          <Bio showDetails={this.state.showDetails} name={this.state.name} bio={this.state.bio} profile_picture={this.state.profile_picture} phone={this.state.phone} email={this.state.email}/>
          <div className="album_container">
            {this.state.album.map(function(album){
              return <Album album={album} key={album.id}/>
            })}
          </div>
        </div>:<div className="EmptyCardShow">
          <Bio showDetails={this.state.showDetails}/>
        </div>}
      </div>
    );
  }
}

export default App;
