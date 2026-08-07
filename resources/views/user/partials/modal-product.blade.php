<style>
#quickViewLeft {
    width: 100%;
    min-height: 320px;
}
#quickViewRight {
    width: 100%;
    padding-left: 1rem;
    padding-right: 1rem;
}
#quickViewRight h1 {
    font-size: 1.25rem;
    line-height: 1.75rem;
}
@media (min-width: 768px) {
    #quickViewLeft {
        width: 50%;
        min-height: 600px;
    }
    #quickViewRight {
        width: 50%;
    }
    #quickViewRight h1 {
        font-size: 1.875rem;
        line-height: 2.25rem;
    }
}
</style>
<!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered lg:min-w-[1140px]">
		<div class="modal-content">
			<div class="modal-body p-8">
				<div class="absolute top-0 right-0 p-3">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							class="icon icon-tabler icon-tabler-x text-gray-700"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							stroke-width="2"
							stroke="currentColor"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
						>
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M18 6l-12 12" />
							<path d="M6 6l12 12" />
						</svg>
					</button>
				</div>
				<div class="flex" style="align-items:stretch; flex-wrap:wrap;">
				<div id="quickViewLeft" class="flex flex-col">
					
					<div style="position:relative; width:100%; height:100%; min-height:inherit; border:1px solid #e5e7eb; border-radius:8px; overflow:hidden; flex:1;">
						<div id="quickViewLoader" style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;background:#f9fafb;z-index:20;">
							<span style="color:#6b7280;font-size:14px;">Đang tải mẫu...</span>
						</div>
						<iframe id="quickViewIframe" src="" style="position:absolute;inset:0;width:100%;height:100%;border:none;z-index:10;" onload="document.getElementById('quickViewLoader').style.display='none'"></iframe>
					</div>
				</div>
					<div id="quickViewRight" class="pr-4 pl-4">
						<div class="lg:pl-10 mt-6 md:mt-0">
							<div class="flex flex-col gap-4">
								<!-- content -->
								<a href="#!" class="block text-rose-500">Bakery Biscuits</a>
								<!-- heading -->
								<h1>Napolitanke Ljesnjak</h1>
								<div class="flex flex-col gap-2">
									<div class="flex items-center">
										<!-- rating -->
										<!-- rating -->
										<small class="text-yellow-500 inline-flex items-center">
											<svg
												xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-star-filled"
												width="14"
												height="14"
												viewBox="0 0 24 24"
												stroke-width="2"
												stroke="currentColor"
												fill="none"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path
													d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
													stroke-width="0"
													fill="currentColor"
												></path>
											</svg>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-star-filled"
												width="14"
												height="14"
												viewBox="0 0 24 24"
												stroke-width="2"
												stroke="currentColor"
												fill="none"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path
													d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
													stroke-width="0"
													fill="currentColor"
												></path>
											</svg>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-star-filled"
												width="14"
												height="14"
												viewBox="0 0 24 24"
												stroke-width="2"
												stroke="currentColor"
												fill="none"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path
													d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
													stroke-width="0"
													fill="currentColor"
												></path>
											</svg>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-star-filled"
												width="14"
												height="14"
												viewBox="0 0 24 24"
												stroke-width="2"
												stroke="currentColor"
												fill="none"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path
													d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
													stroke-width="0"
													fill="currentColor"
												></path>
											</svg>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												class="icon icon-tabler icon-tabler-star-filled"
												width="14"
												height="14"
												viewBox="0 0 24 24"
												stroke-width="2"
												stroke="currentColor"
												fill="none"
												stroke-linecap="round"
												stroke-linejoin="round"
											>
												<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
												<path
													d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
													stroke-width="0"
													fill="currentColor"
												></path>
											</svg>
										</small>
										<a href="#" class="text-rose-500">(30 reviews)</a>
									</div>
									<div class="text-md">
										<span class="text-gray-900 font-semibold">$18</span>
										<span class="line-through text-gray-500">$24</span>

										<span><small class="text-red-600">26% Off</small></span>
									</div>
								</div>
								<!-- hr -->
								<div class="flex flex-col gap-6">
									<hr />
									<div class="hidden md:block">
										<button
											type="button"
											class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
										>
											250g
										</button>
										<!-- btn -->
										<button
											type="button"
											class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
										>
											500g
										</button>
										<!-- btn -->
										<button
											type="button"
											class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
										>
											1kg
										</button>
									</div>
									<div class="flex flex-nowrap justify-start gap-2 items-center">
										<div class="flex-1">
											<!-- button -->
											<!-- btn -->
											<button
												type="button"
												class="btn bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300 justify-center w-full"
											>
												<svg
													xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-plus mr-2"
													width="12"
													height="12"
													viewBox="0 0 24 24"
													stroke-width="3"
													stroke="currentColor"
													fill="none"
													stroke-linecap="round"
													stroke-linejoin="round"
												>
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path d="M12 5l0 14"></path>
													<path d="M5 12l14 0"></path>
												</svg>
												Add to cart
											</button>
										</div>
										<div class="flex gap-2">
											<!-- btn -->
											<button
												type="button"
												id="qvCartBtn"
												title="Thêm vào giỏ hàng"
												class="mr-1 btn inline-flex items-center gap-x-2 px-0 h-10 w-10 justify-center bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
											>
												<svg
													xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-shopping-bag"
													width="20"
													height="20"
													viewBox="0 0 24 24"
													stroke-width="2"
													stroke="currentColor"
													fill="none"
													stroke-linecap="round"
													stroke-linejoin="round"
												>
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
													<path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
												</svg>
											</button>
											<button
												type="button"
												id="qvFavBtn"
												title="Thêm vào danh sách yêu thích"
												class="btn inline-flex items-center gap-x-2 px-0 h-10 w-10 justify-center bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
											>
												<svg
													xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-heart"
													width="20"
													height="20"
													viewBox="0 0 24 24"
													stroke-width="2"
													stroke="currentColor"
													fill="none"
													stroke-linecap="round"
													stroke-linejoin="round"
												>
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
												</svg>
											</button>
										</div>
									</div>
									<!-- hr -->
									<hr />
								</div>
								<div>
									<!-- table -->
									<table class="text-left w-full" id="quickViewInfoTable">
									<tbody>
										<tr>
											<td class="px-6 py-3 text-gray-500 font-medium">Mã mẫu:</td>
											<td class="px-6 py-3 font-semibold" id="qv-code">MT-00001</td>
										</tr>
										<tr>
											<td class="px-6 py-3 text-gray-500 font-medium">Trạng thái:</td>
											<td class="px-6 py-3"><span class="text-rose-500 font-semibold">✓ Có thể sử dụng ngay</span></td>
										</tr>
										<tr>
											<td class="px-6 py-3 text-gray-500 font-medium">Thể loại:</td>
											<td class="px-6 py-3" id="qv-category">Thiệp Mẫu</td>
										</tr>
										<tr>
											<td class="px-6 py-3 text-gray-500 font-medium">Nhận thiệp:</td>
											<td class="px-6 py-3"><span class="text-rose-500">Ngay lập tức sau khi tạo</span></td>
										</tr>
									</tbody>
								</table>
								</div>
								<div>
									<!-- dropdown -->
									<div class="relative">
										<a
											class="dropdown-toggle btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
											href="#"
											role="button"
											data-bs-toggle="dropdown"
											aria-expanded="false"
										>
											Share
										</a>

										<ul class="dropdown-menu">
											<li>
												<a class="dropdown-item" href="#">
													<svg
														xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-brand-facebook inline-block"
														width="18"
														height="18"
														viewBox="0 0 24 24"
														stroke-width="2"
														stroke="currentColor"
														fill="none"
														stroke-linecap="round"
														stroke-linejoin="round"
													>
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
													</svg>
													Facebook
												</a>
											</li>
											<li>
												<a class="dropdown-item" href="#">
													<svg
														xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-brand-x"
														width="18"
														height="18"
														viewBox="0 0 24 24"
														stroke-width="2"
														stroke="currentColor"
														fill="none"
														stroke-linecap="round"
														stroke-linejoin="round"
													>
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 4l11.733 16h4.267l-11.733 -16z" />
														<path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
													</svg>
													Twitter
												</a>
											</li>
											<li>
												<a class="dropdown-item" href="#">
													<svg
														xmlns="http://www.w3.org/2000/svg"
														class="icon icon-tabler icon-tabler-brand-instagram"
														width="18"
														height="18"
														viewBox="0 0 24 24"
														stroke-width="2"
														stroke="currentColor"
														fill="none"
														stroke-linecap="round"
														stroke-linejoin="round"
													>
														<path stroke="none" d="M0 0h24v24H0z" fill="none" />
														<path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
														<path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
														<path d="M16.5 7.5l0 .01" />
													</svg>
													Instagram
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
