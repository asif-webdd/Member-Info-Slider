<?php
/**
 * ZSLN Basic Widget.
 *
 * @since 1.0.0
 */

use \Elementor\Widget_Base;

class Mis extends Widget_Base {

	/**
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'MemberInfoSlider';
	}

	/**
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'MIS', 'mis' );
	}

	/**
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-animation';
	}

	/**
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic' ];
	}

	// add stylesheet dependency in widget
	public function get_style_depends() {
		return [ 'mis-css' ];
	}

	// add js dependency in widget
	public function get_script_depends() {
		return [ 'main-js', 'owl-min-js' ];
	}

	/**
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		



	}


	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		?>

	<div class="owl-carousel main-slider">
		<div class="card-sec">
			<div class="top-icons">
				<div class="tli">
					<i class="fas fa-ellipsis-v"></i>
				</div>
				<div class="tri">
					<i class="far fa-heart"></i>
				</div>
			</div>
			<div class="mem-img">
				<img src="http://localhost/sample/wp-content/uploads/2020/07/asif2.png" alt="">
			</div>
			<div class="mem-info">
				<h3>WordPress Developer</h3>
				<h4>Freelancer</h4>
				<p>I'm here as a WordPress & PHP Deverloper & also Coder</p>
				<a href="#" class="subs-btn">Subscribe</a>
			</div>
			<div class="mem-social-links">
				<li>
				<a class="dr" href="#"><i class="fab fa-dribbble"></i></a>
				<p>75k</p>
				<span>Followers</span>
				</li>
				<li>
				<a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
				<p>75k</p>
				<span>Followers</span>
				</li>
				<li>
				<a class="tw" href="#"><i class="fab fa-twitter"></i></a>
				<p>75k</p>
				<span>Followers</span>
				</li>
			</div>
		</div>
	</div>		

		


		<?php
		

}




	

}




