					<?php if ($this->session->tempdata('success')) : ?>
						<div class="alert alert-success alert-dismissible text-white fade show" role="alert">
								<span class="alert-icon align-middle">
									<span class="material-icons text-md">
									thumb_up_off_alt
									</span>
								</span>
								<span class="alert-text"> <?php echo $this->session->tempdata('success'); ?>!</span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
					<?php elseif($this->session->tempdata('error')) : ?>
						<div class="alert alert-danger alert-dismissible text-white fade show" role="alert">
								<span class="alert-icon align-middle">
									<span class="material-icons text-md">
									thumb_down_off_alt
									</span>
								</span>
								<span class="alert-text"> <?php echo $this->session->tempdata('error'); ?>!</span>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
					<?php endif; ?>
