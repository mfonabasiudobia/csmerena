<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="<?php echo "./assets/css/styles.css?id=". uniqid(); ?>">
</head>
<body>

    <div class="page-wrapper">
        <?php require_once("inc/header.php"); ?>

        <?php require_once("inc/top-ads.php"); ?>

        <section>
            <div class="container px-0">
                
                <div class="row g-3">
                    
                    <?php require_once("inc/dashboard-sidebar.php"); ?>

                    <div class="col-lg-9 view-news">

                    <main class="p-3  border bg-white mb-3">
                        
                     <form x-data="{step1: true, step2: false, step3: false, step4 : false, step5 : false, step6 : false}">
                            <h1>Post Your Advert Information</h1>

                            <section 
                                x-data="{title : '',price : '',description:'', isBtn : false, button(){
                                   this.isBtn = this.title.length > 0 && this.price.length > 0 && this.description.length > 0 ? true : false
                                }}"
                                @notify="button"
                                class="row g-3 position-relative py-2" 
                                :class="step1 ? 'left-0' : '-left-full h-0'">  

                                <div class="col-12"> 
                                    <label class="fs-14 fw-light">Advert Title:<span class="text-danger">*</span></label>
                                    <input type="text" @keyup="$dispatch('notify')" x-model="title" class="form-control" />
                                </div>

                                <div class="col-12"> 
                                    <label class="fs-14 fw-light">Price:<span class="text-danger">*</span></label>
                                    <input type="text" @keyup="$dispatch('notify')" x-model="price" class="form-control" />
                                </div>

                                <div class="col-12"> 
                                    <label class="fs-14 fw-light">Description:<span class="text-danger">*</span></label>
                                    <textarea class="form-control" @keyup="$dispatch('notify')" x-model="description" rows="4"></textarea>
                                </div>

                                <div class="col-12 d-flex justify-content-end" > 
                                     <button type="button" class="btn load-more bg-red-900 text-white" x-show="isBtn" x-on:click="step1 = !step1;step2 = !step2">NEXT</button>
                                </div>

                            </section>


                             <section 
                                 x-data="{category : '',condition : '',institution:'', location : '', isBtn : false, button(){
                                   this.isBtn = this.category.length > 0 && this.location.length > 0  && this.institution.length > 0 && this.condition.length  ? true : false
                                }}"
                                @notify="button"
                                class="row g-3 position-relative py-2" 
                                :class="step2 ? 'left-0' : '-left-full h-0'">  

                                <div class="col-12"> 
                                    <label class="fs-14 fw-light">Category:<span class="text-danger">*</span></label>
                                    <select class="form-select" @keyup="$dispatch('notify')" x-model="category">
                                        <option hidden selected>Select Category</option>
                                        <option value="name">Name</option>
                                    </select>
                                </div>

                                <div class="col-12"> 
                                    <label class="fs-14 fw-light">Item Condition:<span class="text-danger">*</span></label>
                                    <select class="form-select" @keyup="$dispatch('notify')" x-model="condition">
                                        <option hidden selected>Select Item Condition</option>
                                        <option value="name">Name</option>
                                    </select>
                                </div>


                                <div class="col-12"> 
                                    <label class="fs-14 fw-light">Institution:</label>
                                    <select class="form-select" @keyup="$dispatch('notify')" x-model="institution">
                                        <option hidden selected>Select Institution</option>
                                        <option value="name">Name</option>
                                    </select>
                                </div>

                                 <div class="col-12"> 
                                    <label class="fs-14 fw-light">Location:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" @keyup="$dispatch('notify')" x-model="location" />
                                    <small class="text-muted fs-13">i.e. Closest area from the institution selected above.</small>
                                </div>

                                <div class="col-12 d-flex justify-content-between"> 

                                     <button type="button" class="btn load-more bg-red-900 text-white"  x-on:click="step1 = !step1;step2 = !step2">BACK</button>


                                     <button type="button" class="btn load-more bg-red-900 text-white" x-show="isBtn" x-on:click="step2 = !step2;step3 = !step3">NEXT</button>
                                </div>

                            </section>



                              <section 
                                 x-data="{email : false ,phone : false , isBtn : false}"
                                @notify="isBtn = $event.detail.message"
                                class="row g-2 position-relative py-2 fs-14" :class="step3 ? 'left-0' : '-left-full h-0'">  

                                <div class="col-12 d-flex align-items-center"> 
                                    <input type="checkbox" class="me-2" id="email-notification" @click="$dispatch('notify', { message : (phone && !email)})" x-model="email" />
                                    <label for="email-notification">Send me Email Notification <span class="text-danger">(mfonabasiisaac@gmail.com)</span></label>
                                </div>

                                <div class="col-12 d-flex align-items-center"> 
                                    <input type="checkbox" class="me-2" id="phone" @click="$dispatch('notify', { message : (!phone && email)})" x-model="phone" />
                                    <label for="phone">Send me Email Notification <span class="text-danger">(090363494839)</span></label>
                                </div>

                                <div class="col-12 d-flex justify-content-between"> 

                                    <button type="button" class="btn load-more bg-red-900 text-white" x-on:click="step2 = !step2;step3 = !step3">
                                        BACK
                                    </button>

                                     <button type="button" class="btn load-more bg-red-900 text-white" x-show="isBtn"  x-on:click="step3 = !step3;step4 = !step4">NEXT</button>
                                </div>

                            </section>


                             <section class="row g-2 position-relative py-2 fs-14" :class="step4 ? 'left-0' : '-left-full h-0'">  

                                <div class="col-12 d-flex align-items-center"> 
                                    Images
                                </div>

                                <div class="col-12 d-flex justify-content-between"> 
                                    <button type="button" class="btn load-more bg-red-900 text-white" x-on:click="step3 = !step3;step4 = !step4">BACK</button>

                                     <button type="button" class="btn load-more bg-red-900 text-white" x-on:click="step4 = !step4;step5 = !step5">NEXT</button>
                                </div>

                            </section>


                             <section 

                                 x-data="{package : false, isBtn : false}" x-init="$watch('package', value => isBtn = value)"
                                class="advert-packages-wrapper row g-2 position-relative fs-14" :class="step5 ? 'left-0' : '-left-full h-0'">  

                                <div class="col-12 row g-3"> 
                                   
                                    <section class="col-md-4">
                                        <label class="advert-package block p-3 d-flex align-items-start border" for='package-1'>
                                            <div class="me-3">
                                                <input type="radio" name="package" x-model='package' id='package-1'>
                                            </div>
                                            <div>
                                                <header class="d-flex justify-content-between align-items-center">
                                                    <h5 class="oswald-font">Package 1</h5>
                                                    <div class="fw-bold">$0.990</div>
                                                </header>
                                                <div class="fs-14">Providing a photo of the item will feature it on our homepage, to make it sell up to 5 times</div>
                                            </div>
                                        </label>
                                    </section>

                                    <section class="col-md-4">
                                        <label class="advert-package block p-3 d-flex align-items-start border" for='package-2'>
                                            <div class="me-3">
                                                <input type="radio" name="package" x-model='package' id='package-2'>
                                            </div>
                                            <div>
                                                <header class="d-flex justify-content-between align-items-center">
                                                    <h5 class="oswald-font">Package 2</h5>
                                                    <div class="fw-bold">$0.990</div>
                                                </header>
                                                <div class="fs-14">Providing a photo of the item will feature it on our homepage, to make it sell up to 5 times</div>
                                            </div>
                                        </label>
                                    </section>


                                    <section class="col-md-4">
                                        <label class="advert-package block p-3 d-flex align-items-start border" for='package-3'>
                                            <div class="me-3">
                                                <input type="radio" name="package" x-model='package' id='package-3'>
                                            </div>
                                            <div>
                                                <header class="d-flex justify-content-between align-items-center">
                                                    <h5 class="oswald-font">Package 3</h5>
                                                    <div class="fw-bold">$0.990</div>
                                                </header>
                                                <div class="fs-14">Providing a photo of the item will feature it on our homepage, to make it sell up to 5 times</div>
                                            </div>
                                        </label>
                                    </section>


                                </div>

                                <div class="col-12 d-flex justify-content-between"> 
                                     <button type="button" class="btn load-more bg-red-900 text-white" x-on:click="step4 = !step4;step5 = !step5">BACK</button>

                                     <button type="submit" class="btn load-more bg-red-900 text-white" x-show="isBtn" >SUBMIT</button>
                                </div>

                            </section>

                        
                     </form>

                    </main>

                    </div>

                </div>
            </div>
        </section>
        <?php require_once("inc/footer.php"); ?>
    </div>
</body>
</html>