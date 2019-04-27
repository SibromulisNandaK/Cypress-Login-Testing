describe("Knowledge Base Application", () => {
  beforeEach(() => {
    cy.fixture("users/admin.json").as("admin");
  });
  // previous test omitted for brevity
  it("Should be able to login: admin", function() {
    cy.visit("login_form.php");
    
    cy
      .get('input[name="username"]')
      .type(this.admin.username)
      .should("have.value", this.admin.username);
    cy
      .get('input[name="password"]')
      .type(this.admin.password)
      .should("have.value", this.admin.password);
    cy.get("form").submit();
  });
});