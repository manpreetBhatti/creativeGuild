import {Container,Row,Col} from 'react-bootstrap/';
import React from 'react';
import './css/Bio.scss';

class Bio extends React.Component {
 	constructor(props) {
	    super(props);
	}
 	render()
  	{
  	return (
	    <div className="Bio">
	      <Container>
	      	<Row>
	      		<Col sm={12} md={3}>
	      			<img src={this.props.profile_picture} alt="profile Image"/>
	      		</Col>
	      		<Col sm={12} md={9}>
	      			<h2>{this.props.name}</h2>
	      			<br/>
	      			<Row>
	      				<Col>
	      					<h5>Bio</h5>
	      					<p className="bio_details">{this.props.bio}</p>
	      				</Col>
	      				<Col sm={12} md={4} className="contactDetails">
			      			<h5>Phone</h5>
			      			<p>{this.props.phone}</p>
			      			<h5>Email</h5>
			      			<p>{this.props.email}</p>
			      		</Col>
	      			</Row>
	      		</Col>
	      	</Row>
	      </Container>
	    </div>);
  };
}

export default Bio;