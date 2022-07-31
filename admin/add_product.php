<?php $page = 'Tambah Produk'; include '../layout/header.php'; ?>

			<div class="row">
				<div class="col-md-9">
					<div class="card-add-product">
						<p class="p1 text-color title-part mb-32">Informasi Produk</p>

						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Foto Produk</p>
							</div>
							<div class="col-md-10">
								<div class="d-flex" style="flex-wrap: wrap;">
									<div class="contain-label-img">
										<label class="mb-8" for="main-image">
											<div class="label-img">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.0368 8.46262V15.611" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M15.6148 12.0368H8.45898" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M2.30005 12.0368C2.30005 4.73472 4.73479 2.29999 12.0369 2.29999C19.339 2.29999 21.7737 4.73472 21.7737 12.0368C21.7737 19.3389 19.339 21.7737 12.0369 21.7737C4.73479 21.7737 2.30005 19.3389 2.30005 12.0368Z" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
												<img id="imgMain" class="output-img">
											</div>
										</label>
										<div class="opsi-label-img" onclick="document.getElementById('imgMain').removeAttribute('src');document.getElementById('main-image').value = null;">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.8892 9.55408C18.8892 17.5731 20.0435 21.1979 12.2797 21.1979C4.5149 21.1979 5.693 17.5731 5.693 9.55408" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M20.3652 6.47979H4.21472" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.7149 6.47979C15.7149 6.47979 16.2435 2.71408 12.2892 2.71408C8.3359 2.71408 8.86447 6.47979 8.86447 6.47979" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</div>
										<p class="p4 paragraph-color nowrap">* Foto Utama</p>
										<input type="file" name="gambar_utama" class="d-none" id="main-image" accept="image/*" onchange="document.getElementById('imgMain').src = window.URL.createObjectURL(this.files[0])">
									</div>

									<?php for ($i=1; $i < 8; $i++) : ?>
										
									<div class="contain-label-img">
										<label class="mb-8" for="image<?= $i ?>">
											<div class="label-img">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.0368 8.46262V15.611" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M15.6148 12.0368H8.45898" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M2.30005 12.0368C2.30005 4.73472 4.73479 2.29999 12.0369 2.29999C19.339 2.29999 21.7737 4.73472 21.7737 12.0368C21.7737 19.3389 19.339 21.7737 12.0369 21.7737C4.73479 21.7737 2.30005 19.3389 2.30005 12.0368Z" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
												<img id="img<?= $i; ?>" class="output-img">
											</div>
										</label>
										<div class="opsi-label-img" onclick="document.getElementById('img<?= $i; ?>').removeAttribute('src');document.getElementById('image<?= $i ?>').value = null;">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.8892 9.55408C18.8892 17.5731 20.0435 21.1979 12.2797 21.1979C4.5149 21.1979 5.693 17.5731 5.693 9.55408" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M20.3652 6.47979H4.21472" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.7149 6.47979C15.7149 6.47979 16.2435 2.71408 12.2892 2.71408C8.3359 2.71408 8.86447 6.47979 8.86447 6.47979" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</div>
										<p class="p4 paragraph-color nowrap">Gambar <?= $i; ?></p>
										<input type="file" name="gambar_utama" class="d-none" id="image<?= $i ?>" accept="image/*" onchange="document.getElementById('img<?= $i; ?>').src = window.URL.createObjectURL(this.files[0])">
									</div>
									<?php endfor ?>
								</div>
								
							</div>
						</div>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Video Produk</p>
							</div>
							<div class="col-md-10">
								<div class="d-flex" style="flex-wrap: wrap;">
									<div class="contain-label-img">
										<label class="mb-8" for="main-video">
											<div class="label-img">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.0368 8.46262V15.611" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M15.6148 12.0368H8.45898" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M2.30005 12.0368C2.30005 4.73472 4.73479 2.29999 12.0369 2.29999C19.339 2.29999 21.7737 4.73472 21.7737 12.0368C21.7737 19.3389 19.339 21.7737 12.0369 21.7737C4.73479 21.7737 2.30005 19.3389 2.30005 12.0368Z" stroke="#FFB23F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
												<img id="videoMain" class="output-img">
											</div>
										</label>
										<div class="opsi-label-img">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.8892 9.55408C18.8892 17.5731 20.0435 21.1979 12.2797 21.1979C4.5149 21.1979 5.693 17.5731 5.693 9.55408" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M20.3652 6.47979H4.21472" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.7149 6.47979C15.7149 6.47979 16.2435 2.71408 12.2892 2.71408C8.3359 2.71408 8.86447 6.47979 8.86447 6.47979" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</div>
										<p class="p4 paragraph-color nowrap">Video</p>
										<input type="file" name="gambar_utama" class="d-none" id="main-video" accept="image/*" onchange="document.getElementById('videoMain').src = window.URL.createObjectURL(this.files[0])">
									</div>

								</div>
								
							</div>
						</div>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Nama Produk</p>
							</div>
							<div class="col-md-10">
								<div class="contain-input">
									<input type="text" name="nama" id="source" maxlength="255" class="input-custome p3 text-color">
									<p class="text-information paragraph-color p4 m-0" style="border-left: 1.5px solid var(--line-color);"><span id="result">0</span>/255</p>
								</div>
							</div>
						</div>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Kategori Produk</p>
							</div>
							<div class="col-md-10">
								<div class="contain-input">
									<select class="input-custome">
										<option style="outline: none;">Jam Tangan</option>
										<option style="outline: none;">Kaca Mata</option>
										<option style="outline: none;">Mandala</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Deskripsi Produk</p>
							</div>
							<div class="col-md-10">
								<div class="contain-input">
									<textarea class="input-custome" style="min-height: 200px"></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="card-add-product">
						<p class="p1 text-color title-part mb-32">Informasi Penjualan</p>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Harga</p>
							</div>
							<div class="col-md-10">
								<div class="contain-input">
									<p class="p4 text-information paragraph-color m-0" style="border-right: 1.5px solid var(--line-color);">Rp</p>
									<input type="number" min="0" name="nama" class="input-custome p3 text-color">
								</div>
							</div>
						</div>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Stok</p>
							</div>
							<div class="col-md-10">
								<div class="contain-input">
									<input type="number" min="0" value="0" name="nama" class="input-custome p3 text-color">
								</div>
							</div>
						</div>
						
					</div>

					<div class="card-add-product">
						<p class="p1 text-color title-part mb-32">Pengiriman</p>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Berat</p>
							</div>
							<div class="col-md-10">
								<div class="contain-input">
									<input type="number" min="0" name="nama" class="input-custome p3 text-color">
									<p class="p4 text-information paragraph-color m-0" style="border-left: 1.5px solid var(--line-color);">gr</p>
								</div>
							</div>
						</div>
						
						<div class="row mb-24">
							<div class="col-md-2">
								<p class="p3 main-color text-label">Ukuran</p>
							</div>
							<div class="col-md-10">
								<div class="row">
									<div class="col-md-4 mb-16">
										<div class="contain-input">
											<input type="number" min="0" name="nama" class="input-custome p3 text-color" placeholder="L" style="width: 100%">
											<p class="p4 text-information paragraph-color m-0" style="border-left: 1.5px solid var(--line-color);">cm</p>
										</div>
									</div>
									<div class="col-md-4 mb-16">
										<div class="contain-input">
											<input type="number" min="0" name="nama" class="input-custome p3 text-color" placeholder="P" style="width: 100%">
											<p class="p4 text-information paragraph-color m-0" style="border-left: 1.5px solid var(--line-color);">cm</p>
										</div>
									</div>
									<div class="col-md-4 mb-16">
										<div class="contain-input">
											<input type="number" min="0" name="nama" class="input-custome p3 text-color" placeholder="T" style="width: 100%">
											<p class="p4 text-information paragraph-color m-0" style="border-left: 1.5px solid var(--line-color);">cm</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>

				<div class="col-md-3">
					<div class="card-add-product">
						
					</div>
				</div>
			</div>

<?php include '../layout/footer.php'; ?>