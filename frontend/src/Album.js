import React from 'react';
import './css/Album.scss'

class Album extends React.Component {
 	constructor(props) {
	    super(props);
	}
 	render()
  	{
  	return (
		<div className="album_details">
			<div className="album_cover" style={{backgroundImage: `url(${this.props.album.img})`}}>
				<div></div>
				<p>{this.props.album.title}</p>
			</div>
			<div className="album_description">
				{this.props.album.description}
				<div className="featured_div">
					<div>
						{this.props.album.featured?<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRufu0KugWCejSxqM_4ESBbL-JKp7_ZY7xn9A&usqp=CAU"/>:''}
					</div>
					<div>
						<p>{this.props.album.date}</p>
					</div>
				</div>
			</div>
	    </div>);
  };
}


export default Album;