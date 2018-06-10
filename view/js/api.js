// Host
// var host = '192.168.0.108';
// var host = '192.168.0.110';
// var host = 'www.autofast.com';
// var host = '127.0.0.1';
var host = 'caiqueoliveira1.tempsite.ws';
	
// API Routes 
var api = {
	'authentication':`http://${host}/api/v1/user/`,
	'state':`http://${host}/api/v1/state/`,
	'client_add':`http://${host}/api/v1/client/add/`,
	'order':`http://${host}/api/v1/order/`,
	'product':`http://${host}/api/v1/product/`,
	'product_sale':`http://${host}/api/v1/product/sale/`,
	'vehicle':`http://${host}/api/v1/vehicle/`,
	'fuel':`http://${host}/api/v1/fuel/`,
	'fuel_supply':`http://${host}/api/v1/fuel/supply/`,
	'service':`http://${host}/api/v1/service/`,
	'service_details':`http://${host}/api/v1/service/details/`,
	'service_provider':`http://${host}/api/v1/service/provider/`,
	'supply_register':`http://${host}/api/v1/supplyRegister/`,
	'payment':`http://${host}/api/v1/payment/`,
	'google_geocode':`https://maps.googleapis.com/maps/api/geocode/json?latlng=`
};

// var api = {
// 	'authentication':`http://${host}/Portal-Auto-Center-API/api/v1/user/`,
// 	'state':`http://${host}/Portal-Auto-Center-API/api/v1/state/`,
// 	'client_add':`http://${host}/Portal-Auto-Center-API/api/v1/client/add/`,
// 	'order':`http://${host}/Portal-Auto-Center-API/api/v1/order/`,
// 	'product':`http://${host}/Portal-Auto-Center-API/api/v1/product/`,
// 	'product_sale':`http://${host}/Portal-Auto-Center-API/api/v1/product/sale/`,
// 	'vehicle':`http://${host}/Portal-Auto-Center-API/api/v1/vehicle/`,
// 	'fuel':`http://${host}/Portal-Auto-Center-API/api/v1/fuel/`,
// 	'fuel_supply':`http://${host}/Portal-Auto-Center-API/api/v1/fuel/supply/`,
// 	'service':`http://${host}/Portal-Auto-Center-API/api/v1/service/`,
// 	'service_details':`http://${host}/Portal-Auto-Center-API/api/v1/service/details/`,
// 	'service_provider':`http://${host}/Portal-Auto-Center-API/api/v1/service/provider/`,
// 	'supply_register':`http://${host}/Portal-Auto-Center-API/api/v1/supplyRegister/`,
// 	'payment':`http://${host}/Portal-Auto-Center-API/api/v1/payment/`,
// 	'google_geocode':`https://maps.googleapis.com/maps/api/geocode/json?latlng=`
// };